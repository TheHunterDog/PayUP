<?php
session_start();
include('layour/header.php')
?>
    <header>
            <?php
            include('layout/navigation.php')
            ?>
                
            
                
           
            
        <h2>PayUp</h2>
        <div id="kleur"></div>
        <img src="img/bewakoof-com-official-247881-unsplash.jpg" alt="">
    </header>
    <section id="OverOns">
        <div id="keuzedelen">
            <div onclick="main(this.id, this.className)" id="divOverOns" class="zijl">
                <h2>Over Ons</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ullam maiores officiis rem, repellat,
                    soluta modi officia nemo explicabo laborum necessitatibus. Fugiat quis numquam tempora assumenda
                    harum quibusdam voluptatum magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius,
                    mollitia. Numquam totam itaque, quos asperiores dolor ratione nobis doloremque rerum temporibus
                    laudantium, nostrum dignissimos amet deserunt quidem. Tempora, soluta minima! Lorem ipsum dolor,
                    sit amet consectetur adipisicing elit. Quaerat, doloribus unde at, quibusdam earum odio ipsum illo
                    culpa molestiae aspernatur temporibus repellendus nihil nemo delectus. Unde, voluptate. Rerum, vero
                    labore?</p>
            </div>
            <div onclick="main(this.id, this.className)" id="divWaaromOns" class="mid">
                <h2>Waarom Ons</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ullam maiores officiis rem, repellat,
                    soluta modi officia nemo explicabo laborum necessitatibus. Fugiat quis numquam tempora assumenda
                    harum quibusdam voluptatum magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius,
                    mollitia. Numquam totam itaque, quos asperiores dolor ratione nobis doloremque rerum temporibus
                    laudantium, nostrum dignissimos amet deserunt quidem. Tempora, soluta minima! Lorem ipsum dolor,
                    sit amet consectetur adipisicing elit. Quaerat, doloribus unde at, quibusdam earum odio ipsum illo
                    culpa molestiae aspernatur temporibus repellendus nihil nemo delectus. Unde, voluptate. Rerum, vero
                    labore?</p>
            </div>
            <div onclick="main(this.id, this.className)" id="divAboutUs" class="zijr">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ullam maiores officiis rem, repellat,
                    soluta modi officia nemo explicabo laborum necessitatibus. Fugiat quis numquam tempora assumenda
                    harum quibusdam voluptatum magni? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius,
                    mollitia. Numquam totam itaque, quos asperiores dolor ratione nobis doloremque rerum temporibus
                    laudantium, nostrum dignissimos amet deserunt quidem. Tempora, soluta minima! Lorem ipsum dolor,
                    sit amet consectetur adipisicing elit. Quaerat, doloribus unde at, quibusdam earum odio ipsum illo
                    culpa molestiae aspernatur temporibus repellendus nihil nemo delectus. Unde, voluptate. Rerum, vero
                    labore?</p>
            </div>
        </div>
    </section>
    <section id="HoeHetWerkt">
        <h2>Hoe het werkt.</h2>
        <iframe src="https://www.youtube.com/watch?v=pFwCc5MAkto" frameborder="0"></iframe>
    </section>
<?php
include('layout/footer.php');
?>