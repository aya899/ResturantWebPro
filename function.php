<?php
include("./compon/book_table.php");


function getproducts(){
     
       global $conn;

       if(!isset($_GET['category'])){
        
    $select_pro="SELECT * FROM `products`  order by title" ;
    $res_pro=mysqli_query($conn,$select_pro); 
    while( $row=mysqli_fetch_assoc($res_pro)){
      $product_id=$row['product_id'];
      $title=$row['title'];
      $license=$row['license'];
      $image=$row['image'];
      $price=$row['price']; 
    


    ?>
    <div class="col-sm-6 col-lg-4 all pizza">
    <div class="box">
    <div>


    

   <div class="img-box">
        <img src="./admin/upload2/<?php echo $row['image']?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <?php echo $row['title']?>
        </h5>
        <p>
         <?php echo $row['license']?>
        </p>
        <div class="options">
          <h6>
          <?php echo $row['price']?>
          </h6>
          
             <a href="quick_view.php?product_id=<?php echo $row['product_id']?>" class="fas fa_eyes">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
             </svg>
             </a>

      

            
         

          
         <a href="">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
              <g>
                <g>
                  <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
               C457.728,97.71,450.56,86.958,439.296,84.91z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      
    </div>
   
   
  </div>
  
  </div>


<?php
    }
    }

}
?>


<?php

include("./compon/book_table.php");


function getcategory(){
    global $conn;
    $category="SELECT * FROM `categories`";
      $res_cat=mysqli_query($conn,$category);
      while($row_data=mysqli_fetch_assoc($res_cat)){
        $tag_name=$row_data['tag_name'];
        $tag_id=$row_data['id'];?>
       <li  class="active" data-filter=''>
       <a href='menu.php?category=<?php echo $tag_id ?>'><?php echo $tag_name ?></a> </li>
       
     <?php
      } 
}


?>


<?php
include("./compon/book_table.php");


function get_uni_category(){
     
       global $conn;

       if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_pro="SELECT * FROM `products`  WHERE tag=$category_id" ;
    $res_pro=mysqli_query($conn,$select_pro); 
    while( $row=mysqli_fetch_assoc($res_pro)){
      $product_id=$row['product_id'];
      $title=$row['title'];
      $license=$row['license'];
      $image=$row['image'];
      $price=$row['price']; 
    


    ?>
    <div class="col-sm-6 col-lg-4 all pizza">
    <div class="box">
    <div>


    

   <div class="img-box">
        <img src="./admin/upload2/<?php echo $row['image']?>" alt="">
      </div>
      <div class="detail-box">
        <h5>
          <?php echo $row['title']?>
        </h5>
        <p>
         <?php echo $row['license']?>
        </p>
        <div class="options">
          <h6>
          <?php echo $row['price']?>
          </h6>
          
             <a href="quick_view.php?product_id=<?php echo $row['product_id']?>" class="fas fa_eyes">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
             </svg>
             </a>

      

            
         

          
         <a href="">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
              <g>
                <g>
                  <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
               c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
               C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
               c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
               C457.728,97.71,450.56,86.958,439.296,84.91z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
               c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                </g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      
    </div>
   
   
  </div>
  






  </div>








<?php
    }
    }

}
?>