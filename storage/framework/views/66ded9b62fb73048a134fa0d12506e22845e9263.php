<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.page_title {
    padding: 30px 0px;
}
.page_title h1 {
    color: #c0392b;
    font-weight: 700;
    line-height: 2;
    margin-bottom: 0;
    position: relative;
    text-transform: capitalize;
}
.page_title h1::before {
    background: #c0392b;
    width: 70px;
    height: 2px;
    position: absolute;
    content: '';
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.page_title h1::after {
    position: absolute;
    content: '';
    background: #fbc531;
    width: 30px;
    height: 2px;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
}
*Menu starts*/
.menu_tab {
    width: 261px;
    margin: 0 auto;
}
.nav-item {
    display: inline-block;
    text-align: center;
}
.nav-tabs .nav-link{
    transition: .3s;
}
.nav-tabs .nav-link.active {
    background: #c0392b;
    color: #fff;
    font-weight: 700;
    border: 1px solid #c0392b;
    text-transform: capitalize;
}
.nav-link {
    color: #000;
    border-bottom: ;
}
.nav-tabs .nav-link:hover {
    background: #c0392b;
    color: #fff;
    border: 1px solid #c0392b;
}
.single_menu {
    position: relative;
    margin-bottom: 75px;
    transition: .3s;
}
.single_menu:hover img{
    -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 50%, 100% 100%, 0% 100%);
clip-path: polygon(0% 0%, 100% 0, 100% 50%, 100% 100%, 0% 100%);

}
.single_menu img {
    width: 33%;
    position: absolute;
    height: 140px;
    -webkit-clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
    transition: .3s;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.menu_content {
    padding-left: 200px;
}
.menu_content h4 {
    font-size: 25px;
    font-weight: 300;
    border-bottom: 1px dashed #c0392b;
    line-height: 2;
    text-transform: capitalize;
}
.menu_content h4 span {
    font-size: 25px;
    font-weight: 800;
    float: right;
    font-style: italic;
    color: #c0392b;
}
.menu_content p {
    font-weight: 200;
    font-size: 16px;
    letter-spacing: 1px;
}
.menu_btn.btn.btn-danger {
    margin: 0 auto;
    display: block;
    width: 140px;
}
/*Menu ends*/
.menu_btn.btn.btn-danger {
  margin: 0 auto;
  display: block;
  width: 140px;
}
.btn.btn-danger {
  background: #c0392b;
  border: 1px solid #c0392b;
  transition: .3s;
  position: relative;
  z-index: 1;
  text-transform: capitalize;
  font-weight: 700;
  overflow: hidden;
  padding: 15px 25px;
}
.btn.btn-danger::before {
  position: absolute;
  content: '';
  background: #e74c3c;
  width: 100%;
  height: 100%;
  left: -100%;
  top: 100%;
  transition: .3s;
  z-index: -1;
}
.btn.btn-danger:hover:before{
    top: 0;
    left: 0;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
.btn-container {
    display: inline-block;
    padding: 16px 0px;
    margin: 0px 16px;
    overflow: hidden;
}
*, *:before, *:after {
    padding: 0px;
    margin: 0px;
    transition: 0.3s;
}
.standard-btn {
     color: #34495e;
    border: solid 1px #34495e;
    font-size: 1rem;
    position: relative;
    z-index: 1;
    padding: 15px 30px;
    cursor: pointer;
    font-size: 1.2rem;
    text-transform: uppercase;
    background: transparent;
}
.standard-btn:before {
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0px;
    height: 100%;
    z-index: -1;
    content: "";
    background: #34495e;
}

.standard-btn:hover {
      color: #fff;
      border: solid 1px #34495e;
}
.standard-btn:hover:before {
      width: 100%;
}
</style>


<?php $__env->startSection('content'); ?>

<div class="container">
    <button class="btn"><i class="fa fa-home"></i> Home</button>
<button class="btn"><i class="fa fa-bars"></i> Menu</button>
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to USER Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in as <strong>USER</strong>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<section id="our_menu" class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page_title text-center mb-4">
            <h1>our menu</h1>
            <div class="single_line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">Breakfast</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Lunch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Dinner</a>
          </li>
        </ul>
          </div>
      <div class="row">
        <div class="tab-content col-lg-12" id="myTabContent">
          <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="img/menu-4.png" alt="mee goreng">
                  <div class="menu_content">
                    <h4>Mee goreng  <span>RM 4.00</span></h4>
                    <p>Mie goreng, also known as bakmi goreng, is an often spicy fried noodle dish.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img001.png" alt="black coffee">
                  <div class="menu_content">
                    <h4>Roti Canai <span>RM 4.00</span></h4>
                    <p>Roti canai, also known as roti cane or roti parotta, is an Indian-influenced flatbread dish.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img002.png" alt="fried rice">
                  <div class="menu_content">
                    <h4>Thosai <span>RM 1.50</span></h4>
                    <p>Thosai is a type of pancake or crèpe, originating from the Indian subcontinent, made from a fermented batter.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img003.png" alt="meat">
                  <div class="menu_content">
                    <h4>Chapati  <span>RM 1.20</span></h4>
                    <p>Chapati, also known as roti, safati, shabaati, phulka and roshi, is an unleavened flatbread originating from the Indian subcontinent.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="img/img004.png" alt="burger">
                  <div class="menu_content">
                    <h4>Idli  <span>RM 1.20</span></h4>
                    <p>Idli or idly are a type of savoury rice cake, originating from the Indian subcontinent, popular as breakfast foods.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img011.png" alt="black coffee">
                  <div class="menu_content">
                    <h4>Toast Bread <span>RM 4.00</span></h4>
                    <p>Toast is a form of bread that has been browned by exposure to radiant heat.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img015.png" alt="fried rice">
                  <div class="menu_content">
                    <h4>Half Boil Egg  <span>$45</span></h4>
                    <p>Creamy half boiled egg with ketchup and white pepper .</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img010.png" alt="">
                  <div class="menu_content">
                    <h4>Nasi Lemak  <span>$24</span></h4>
                    <p>Nasi lemak is a Malay fragrant rice dish cooked in coconut milk and pandan leaf.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img020.png" alt="Nasi Lemak">
                  <div class="menu_content">
                    <h4>Coffee  <span>$24</span></h4>
                    <p>Rich taste of creamy coffee to start the day.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
                <div class="single_menu">
                  <img src="img/img018.png" alt="fried rice">
                  <div class="menu_content">
                    <h4>Tea  <span>$45</span></h4>
                    <p>Also known as the Teh Tarik in Malaysia made of black tea and sweet corn milk.</p>
                  </div>
                  <div class="container">
  <div class="row">
  <div class="btn-container">
          <a class="btn standard-btn" href="#">Order Now!</a>
    </div>
  </div>
</div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="https://i.imgur.com/Aowufa1.jpg" alt="pizza">
                  <div class="menu_content">
                    <h4>12" Pizza  <span>$35</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/DJlmZDJ.jpg" alt="salad">
                  <div class="menu_content">
                    <h4>Salad <span>$20</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/knnQm7e.jpg" alt="green tea">
                  <div class="menu_content">
                    <h4>green tea <span>$15</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                  <div class="menu_content">
                    <h4>meat  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                  <div class="menu_content">
                    <h4>Chicken Burger  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                  <div class="menu_content">
                    <h4>Black coffee <span>$20</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                  <div class="menu_content">
                    <h4>Fried Rice  <span>$45</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                  <div class="menu_content">
                    <h4>meat  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                  <div class="menu_content">
                    <h4>Chicken Burger  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                  <div class="menu_content">
                    <h4>Black coffee <span>$20</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                  <div class="menu_content">
                    <h4>Fried Rice  <span>$45</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                  <div class="menu_content">
                    <h4>meat  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single_menu">
                  <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                  <div class="menu_content">
                    <h4>Chicken Burger  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                  <div class="menu_content">
                    <h4>Black coffee <span>$20</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                  <div class="menu_content">
                    <h4>Fried Rice  <span>$45</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
                <div class="single_menu">
                  <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                  <div class="menu_content">
                    <h4>meat  <span>$24</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class=" menu_btn btn btn-danger">view more</a>
      </div>
    </div>
  </section>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FYP\laravel\resources\views/home.blade.php ENDPATH**/ ?>