@extends("Layout.app")


@section("content")
<div class="user_info text-center">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset(env("APP_ASSETS_FOLDER")."styles/imgs/profile_image.png") }}"/>
        </div>
        <div class="col-md-4 text-left">
            <div class="details">
                <h4 class="text-left">Mohamad SheikOmer</h4>
                <p>Program Director</p>
                <p>HQ mohamad@araha.org</p>
            </div>

        </div>
        <div class="col-md-4 text-right">
            <button class="new-project-btn " style="margin-top: 30px;">--COUNTRY--</button>
        </div>
    </div>
</div>
<div class="data-list">
   <h2 class="title">Recent projects</h2>
    <div class="data">
        <?php for($i=0;$i<=2;$i++){?>
            <div class="item">
                <div class="row list-unstyled text-center tabs">
                    <li class="col-md-3">Health</li>
                    <li class="col-md-3">Shagarab,Sudan</li>
                    <li class="col-md-3">Approved</li>
                    <li class="col-md-3">Open</li>

                </div>

                <div class="description">
                    <div class="heading">Project #22 Buram School project</div>
                    <div class="text">This is Photoshop's version  of Lorem
                        Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi
                        elit consequat ipsum, nec sagittis sem nibh id elit.
                        Duis sed odio sit amet nibh vulputate cursus a sit amet
                        mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                        tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                        consequat auctor eu in elit. Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos.
                        Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum
                        sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin
                        condimentum </div>
                </div>
            </div>



        <?php } ?>




    </div>
</div>
@endsection