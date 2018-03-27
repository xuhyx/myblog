<?php
	class Model{
		public $tableName;
		public $pdo;
		public $pk;
		public $field; //保存查询的字段
		public $where;
		public $order;
		public $limit;
		//构造函数初始化------------------------------------------
		
		public function __construct($tbl_name){
			
			//设置表名
			$this->tableName=$tbl_name;
			
			//链接数据库
			$this->pdo=new PDO('mysql:host='.HOST.';dbname='.DB_NAME.';charset='.CHARSET.';port=3306',USER,PASSWORD);
	
			
			//调用getField获取表单字段的信息
			$this->getField();
		}
		
		//获取表单字段
		public function getField(){
			$res=$this->pdo->query("desc {$this->tableName}");
			if($res && $res->rowCount()>0){
				$rows=$res->fetchAll(PDO::FETCH_ASSOC);
				foreach($rows as $k=>$v){
					if($v['Key']=="PRI"){
						$this->pk=$v['Field'];
					}
				}
			}
		}
		
		
		
		
		//返回错误报告--------------------------------------
		public function err_report(){
			echo"<script>alert('".$this->pdo->errorinfo()[2]."')</script>";
		}
		
		//增----------------------------------------------------
		public function add($data){
			//提取数组中的key
			$keys=array_keys($data);
			$keys=implode(',', $keys);
			
			//提取数组中的value
			$values=array_values($data);
			$values="'".implode("','", $values)."'";
			$res=$this->pdo->query("insert into {$this->tableName} ({$keys}) values({$values})");
			if($res && $res->rowCount()>0){
				return $this->pdo->lastInsertId();
			}else{
				$this->err_report();
				return false;
			}
		}
		//删----------------------------------------------------
		public function del($id){
			$affected = $this->pdo->exec("delete from {$this->tableName} where {$this->pk}={$id}");
			if($affected>0){
				return true;
			}else if($affected==0){
				echo"<script>alert('没有删除记录，请检查ID')</script>";
				return false;
			}else{
				$this->err_report();
				return false;
			}
		}
		//改----------------------------------------------------
		public function update($data,$id){
			foreach($data as $k=>$v){
				$arr[]="$k='$v'";
			}
			$str=implode(',', $arr);
			$affected = $this->pdo->exec("update {$this->tableName} set {$str} where {$this->pk}={$id}");
			if($affected){
				return true;
			}else{
				$this->err_report();
				return false;
			}
		}
		
		//查----------------------------------------------------
		public function select(){
				
			//选择字段查询
			$f='';
			if(empty($this->field)){
				$f='*';
			}else{
				$f=$this->field;
			}
			//where条件
			$w='';
			if(!empty($this->where)){
				$w="where ".$this->where;
			}
			//order by 排序
			$o='';
			if(!empty($this->order)){
				$o="order by ".$this->order;
			}else{
				$o="order by ".$this->pk;
			}
			//limit限制
			$l='';
			if(!empty($this->limit)){
				$l="limit ".$this->limit;
			}
			$res=$this->pdo->query("select {$f} from {$this->tableName} {$w} {$o} {$l}");
			if($res && $res->rowCount()>0){
				$rows = $res->fetchAll(PDO::FETCH_ASSOC);
				$this->field=null; //保存查询的字段
				$this->where=null;
				$this->order=null;
				$this->limit=null;
				return $rows;
			}else{
				return false;
			}
			
		}
		//选择字段
		public function field($data){
			$this->field=$data;
			return $this;
		}
		
		//选择where条件
		public function where($where){
			$this->where=$where;
			return $this;
		}
		//order by排序
		public function order($order){
			$this->order=$order;
			return $this;
		}
		//限制查询
		public function limit($limit){
			$this->limit=$limit;
			return $this;
		}
		//单条查-------------------------------------------------
		public function find($id){
			$res=$this->pdo->query("select * from ($this->tableName) where id={$id}");
			if($res && $res->rowCount()>0){
				return $res->fetch(PDO::FETCH_ASSOC);
			}else{
				return false;
			}
		}
		// 统计条目数---------------------------------------------
		public function Count(){
			//where条件
			$w='';
			if(!empty($this->where)){
				$w="where ".$this->where;
			}
			$res=$this->pdo->query("select * from {$this->tableName} ".$w);
			if($res){
				return $res->rowCount();
			}else{
				return false;
			}
		}
		//query 原生sql语句
		public function query($sql){
			$s=explode(" ", $sql)[0];
			switch ($s){
				case "insert":
					$res=$this->pdo->query($sql);
					if($res && $res->rowCount()>0){
						return $this->pdo->lastInsertId();
					}else{
						$this->err_report();
						return false;
					}
				break;
				case "delete":
					$affected = $this->pdo->exec($sql);
					if($affected>0){
						return true;
					}else if($affected==0){
						echo"<script>alert('没有删除记录，请检查ID')</script>";
						return false;
					}else{
						$this->err_report();
						return false;
					}
				break;
				case "update":
					$affected = $this->pdo->exec($sql);
					if($affected){
						return true;
					}else{
						$this->err_report();
						return false;
					}
				break;
				case "select":
					$res=$this->pdo->query($sql);
					if($res && $res->rowCount()>0){
						$rows = $res->fetchAll(PDO::FETCH_ASSOC);
						return $rows;
					}else{
						return false;
					}
				break;
			}
		}
		
	}
?>