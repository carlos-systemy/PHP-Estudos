<?php
  $array = [
              [
                ['name'=>'John B'],
                ['age'=>30],
                ['sizes'=>
                          [
                          'weight'=>80, 
                          'height'=>120
                          ]
                ]
              ],
              [
                ['name'=>'Marie B'],
                ['age'=>31],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>110
                          ]
                ]
              ],
              [
                ['name'=>'Carl M'],
                ['age'=>12],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>100
                          ]
                ]
              ],
              [
                ['name'=>'Mike N'],
                ['age'=>19],
                ['sizes'=>
                          [
                          'weight'=>70, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Nancy N'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>60, 
                          'height'=>150
                          ]
                ]
              ],
              [
                ['name'=>'Cory X'],
                ['age'=>15],
                ['sizes'=>
                          [
                          'weight'=>44, 
                          'height'=>150
                          ]
                ]
              ]
  ];

  $j=0;
$flag = true;
$temp=0;

while ( $flag )
{
  $flag = false;
  for( $j=0;  $j < count($array)-1; $j++)
  {
    if ( $array[$j][2]["sizes"]["weight"] > $array[$j+1][2]["sizes"]["weight"] )
    {
      $temp = $array[$j];
      //swap the two between each other
      $array[$j] = $array[$j+1];
      $array[$j+1]=$temp;
      $flag = true; //show that a swap occurred
    }
  }
}
echo "<pre>";
print_r($array);
echo "<pre>";
  ?>