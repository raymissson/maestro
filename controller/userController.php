<?php
	class userController{
		public function __construct($con){
			$this->con = $con;
		}

		public function setConversa($assunto,$setor){
			$sql = "INSERT INTO chat(assunto,setor) VALUES('$assunto','$setor')";
			$query = mysqli_query($this->con,$sql);
			if($query){
				echo "Conversa cadastrada";
				//echo "<h6 class=\"bg-success\">Conversa cadastrada</h6>";
			}
			else{
				echo "Erro ao inserir".mysqli_error($this->con);
			}
		}

		public function getConversa(){
			$sql = "SELECT * FROM chat";
			
		}
	}
?>