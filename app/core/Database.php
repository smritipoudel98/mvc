<?php

Trait Database
{
	private function connect()
	{
		$string = "mysql:host=".DBHOST.";dbname=".DBNAME;
        $con = new PDO($string,DBUSER,DBPASS);
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con ;

		
    }

    public function query($query, $data =[])
	{
		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
			if($check)
			{
				
               if (stripos(trim($query), "select") === 0) {
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
		        if(is_array($result) && count($result))
		            {
			           return $result;
		             }

	         }
	         return true;
    }
    return false;
}
    public function get_row($query, $data =[])
	{
		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
			if($check)
			{
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
		        if(is_array($result) && count($result))
		            {
			           return $result[0];
		             }

	         }
	         return false;
}
}
