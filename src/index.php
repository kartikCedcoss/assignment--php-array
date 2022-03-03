<?php 
$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
        );
echo "<table borde='2px'></tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>";
   
foreach($products as $key => $value )
{
      
        foreach( $value as $arr => $arrval){

          

                foreach($arrval as $arr2 => $item){
    
                         
                            
                                echo "<tr><td>".$key."</td><td>".$arr."</td><td>".$item['id']."</td><td>".$item['name']."</td><td>".$item['brand']."</td></tr>";
                            
                            
                                
            
                            }
            
                        }
    
                    }
                    echo "</table><br>";


            echo "<table><tr><th>Subcategory</th><th>Id </th><th>Name</th><th>Brand</th>";
                    foreach($products as $key => $value )
                    {
                           // echo "<tr><td>".$key."</td>";
                            foreach( $value as $arr => $arrval){
                    
                               // echo "<td>".$arr."</td>";
                    if($arr == 'Mobile'){
                                    foreach($arrval as $arr2 => $item){
                        
                                             
                                                
                                                    echo "<tr><td>".$arr."</td><td>".$item['id']."</td><td>".$item['name']."</td><td>".$item['brand']."</td></tr>";
                                                
                                                
                                                    
                                
                                                }
                                            }
                                            }
                        
                                        }
                                        echo "</table><br>";


                                        
                    foreach($products as $key => $value )
                    {
                           if($key=="Electronics"){
                            foreach( $value as $arr => $arrval){
                    
                              
                                if($arr == 'Mobile'){
                                    foreach($arrval as $arr2 => $item){
                        
                                             if($arr2 == 'Samsung'){
                                                 echo  "Product id:-". $item['id']."<br>";
                                                 echo  "Product name:-". $item['name']."<br>";
                                                 echo  "Product brand:-". $item['brand']."<br>";
                                                 echo "product Subcategory:-".$arr."<br>";
                                                 echo "product Category :-".$key."<br><br>";

                                             }
                                                
                                            }
                                        }
                                      }
                                }
                        }
                                        
                                        
 $newProducts = $products;
 
 echo "BEFORE DELETE:-<br>";
 foreach($newProducts as $cat => $valc){
    foreach($valc as $sub => $vals){
        foreach($vals as $item => $vali){
            
            if($vali['id'] == 'PR003'){
                
                       print_r ($vals);
                }            
            
            
        }
    }
}
echo "</table><br><br>";

echo "After DELETE:-<br>";
 foreach($newProducts as $cat => $valc){
     foreach($valc as $sub => $vals){
         foreach($vals as $item => $vali){
             if($vali['id'] == 'PR003'){
             array_splice($vals,2);
                    print_r ($vals);
                    echo "<br><br><br>";
             }

         }
     }
 }

 echo "BEFORE UPDATE:-<br>";
 echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
 
 
 foreach($newProducts as $cat => $valc){
      
     foreach($valc as $sub => $vals){
       
         foreach($vals as $item => $vali){
             
              echo '<tr><td>'.$cat .'</td><td>'.$sub.'</td><td>'.$vali['id'].'</td><td>'.$vali['name'].'</td><td>'.$vali['brand'].'</td></tr>';
         }
     }
 }
 echo '</table>';




 
  echo "AFTER UPDATE:-<br>";
 echo '<table><tr><th>Category</th><th>SubCategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>';
 
 
 foreach($newProducts as $cat => $valc){
      
     foreach($valc as $sub => $vals){
       
         foreach($vals as $item => $vali){
             if($vali['id'] == "PR002") {
             
              $vali['name'] = "BIG-555";
              }
              echo '<tr><td>'.$cat .'</td><td>'.$sub.'</td><td>'.$vali['id'].'</td><td>'.$vali['name'].'</td><td>'.$vali['brand'].'</td></tr>';
         }
     }
 }
 echo '</table>';
 ?>


