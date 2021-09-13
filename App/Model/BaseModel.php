<?php 
require('App/Model/Dbconnection.php');
/**
 * 
 */
class BaseModel 
{
	$db = Database::getInstance();
    $pdo = $db->getConnection();
	function show($show)
	{
		$stmt= $pdo->query($show);
        return $stmt;
	}
	function create($create,$ids)
	{
		$stmt= $pdo->prepare($create);
              if(false===$stmt)
                {
                   trigger_error("Error in query");
                }
              else
                {
                   $stmt->bind_param('sss',$ids);
                   $stmt->execute();
                }
	}
	function edit($edit,$ids)
	{
		$stmt= $pdo->prepare($edit);
      	$stmt->bind_param('ssssi',$ids);
      	$stmt->execute();
	}
	function del($del,$ids)
	{
		$stmt= $pdo->prepare($del);
        $stmt->bind_param('s',$ids);
        $stmt->execute();
	}
}
?>