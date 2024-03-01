<style>
    .long-text{
  width: 70ch;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
</style>

<?php
include ('db/connect.php');
$ret = mysqli_query($conn , "SELECT * FROM blog ORDER BY id DESC limit 6 ");
if(mysqli_num_rows($ret) > 0) {

  while ($row=mysqli_fetch_array($ret)){
?>
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="https://app.iiahmaviationacademy.com/blog/blogimg/<?=$row['img']?>" alt="image">
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title"><?=$row['title']?></h3>
                                        <p class="long-text"><?=$row['blog']?></p>
                                        <div class="meta-post d-flex flex-wrap justify-content-between">
                                            <span class="meta-user">By :- <?=$row['poated_by']?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            
<?php }}else
{
    echo "No Blogs to show";
} ?>