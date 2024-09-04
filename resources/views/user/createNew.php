

<section class="services section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title">
                    <u> <h3><b>Explore Our world of Premium Health Services</b>.</h3></u>
                     <!-- <img src="img/section-img.png" alt="#"> -->
                     <!-- <p>Below is a colection of our services,click o each service to see details</p> -->
                  </div>
               </div>
            </div>
            <div class="row">

               <div class="col-lg-4 col-md-6 col-12">
                  <!-- Start Single Service -->
                 <?php

$categories = DB::table('categories')->get();

if ($categories->isNotEmpty()) {
    foreach ($categories as $category) {
        echo "<b><h2 class='category'>$category->name</h2></b>";
        echo "<div class='encapsulate' style='display: none; color: blue;'>";

        $services = DB::table('serves')->where('category_id', $category->id)->get();
        if ($services->isNotEmpty()) {
            foreach ($services as $service) {
                echo "<div class='single-service'>";
                echo "<i class='icofont icofont-prescription'></i>";
                echo "<h4><a href='" . url('service_view', ['id' => $service->id]) . "'>$service->name</a></h4>";
                echo "</div>";
            }
        } else {
            echo "<p>No services found for this category.</p>";
        }

        echo "</div>";
    }
} else {
    echo "<p>No categories found.</p>";
}

?>




                  <div class="single-service">
                        

                       
                  </div>


                   

                  <!-- End Single Service -->
               </div>

                  <!-- End Single Service -->
               </div>
            </div>
         </div>
      </section>
      <script>
    document.addEventListener('DOMContentLoaded', function() {
        const categories = document.querySelectorAll('.category');

        categories.forEach(category => {
            category.addEventListener('click', function() {
                const encapsulate = this.parentElement.querySelector('.encapsulate');
                console.log(encapsulate); // Debugging: check the encapsulate element
                if (encapsulate) {
                    encapsulate.style.display = (encapsulate.style.display === 'block') ? 'none' : 'block';
                }
            });
        });
    });
</script>

