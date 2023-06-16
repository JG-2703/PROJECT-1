<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM college 
	";
	if(isset($_POST["minimum_fees"], $_POST["maximum_fees"]) && !empty($_POST["minimum_fees"]) && !empty($_POST["maximum_fees"]))
	{
		$query .= "
		where college_fees BETWEEN '".$_POST["minimum_fees"]."' AND '".$_POST["maximum_fees"]."'
		";
	}
	if(isset($_POST["city"]))
	{
		$city_filter = implode("','", $_POST["city"]);
		$query .= "
		 where college_city IN('".$city_filter."')
		";
	}
	if(isset($_POST["jee"]))
	{
		$jee_filter = implode("','", $_POST["jee"]);
		$query .= "
		 where college_jee IN('".$jee_filter."')
		";
	}
	if(isset($_POST["pcm"]))
	{
		$pcm_filter = implode("','", $_POST["pcm"]);
		$query .= "
		 where college_pcm IN('".$pcm_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:350px;">
					<img src="'. $row['college_image'] .'" alt="" class="img-responsive" style="width:100%">
					<p align="center"><strong><a href="'.$row['college_link'].'">'. $row['college_name'] .'</a></strong></p>
					<p>Approved by : '. $row['college_detail'].' <br />
					City : '. $row['college_city'] .' <br />
					Fees : Rs.'. $row['college_fees'] .' <br />
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>