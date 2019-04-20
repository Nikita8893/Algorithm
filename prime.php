
<?php

 function prime_num()
      {
        for($no = 2; $no<=1000; $no++)
		{
			$temp = 0;
			for($i = 2; $i<=$no-1;$i++)
			{
				if($no%$i==0)
				{
					$temp = $temp + 1;
				}
			}
			if($temp == 0)
			{
				echo  $no." ";
			}
		}
      }

?>