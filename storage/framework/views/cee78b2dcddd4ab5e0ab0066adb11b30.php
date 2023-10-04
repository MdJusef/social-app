<!--Section: Newsfeed-->
<!DOCTYPE html>
<html>
<title>Social App</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-md-8 offset-md-2">

                <div class="d-flex mb-3">
                    <a href="">
                        <img src="<?php echo e(asset('storage/' . Auth::user()->profile_photo_path)); ?>" class="border rounded-circle me-2"
                             alt="Avatar" style="height: 40px"/>
                    </a>
                    <div>
                        <a href="" class="text-dark mb-0">
                            <strong><?php echo e(Auth::user()->username); ?></strong>
                        </a>
                    </div>
                </div>

                <form action="<?php echo e('new-post'); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="" style="max-width: 42rem">
                        <textarea type="text" name="content" class="form-control" id=""></textarea>
                        <input type="file" name="image_path" class="form-control" id="">
                        <button type="submit" class="text-right btn btn-primary px-5">Post</button>
                    </div>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</section>
<br> <br>
<!--Section: Newsfeed-->


<?php $i=1 ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="card" style="max-width: 42rem">
                        <div class="card-body">
                            <!-- Data -->
                            <div class="d-flex mb-3">
                                <a href="">
                                    <img src="<?php echo e(asset('storage/'. $post->profile_photo_path)); ?>"
                                         class="border rounded-circle me-2"
                                         alt="Avatar" style="height: 40px"/>
                                </a>
                                <div>
                                    <a href="" class="text-dark mb-0">
                                        <strong><?php echo e($post->username); ?></strong>
                                    </a>
                                    <a href="" class="text-muted d-block" style="margin-top: -6px">
                                        <small><?php echo e($post->created_at); ?></small>
                                    </a>
                                </div>
                            </div>
                            <!-- Description -->
                            <div>
                                <p>
                                    <?php echo e($post->content); ?>

                                </p>
                            </div>
                        </div>
                        <!-- Media -->
                        <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                            <img src="<?php echo e(asset($post->image_path)); ?>" class="w-100"/>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                        <!-- Media -->
                        <!-- Interactions -->
                        <div class="card-body">
                            <!-- Reactions -->
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <a href="">
                                        <i class="fas fa-thumbs-up text-primary"></i>
                                        <i class="fas fa-heart text-danger"></i>
                                        <span>124</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="" class="text-muted"> 8 comments </a>
                                </div>
                            </div>
                            <!-- Reactions -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between text-center border-top border-bottom mb-4">
                                <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                    <i class="fas fa-thumbs-up me-2"></i>Like
                                </button>

                                <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                    <i class="fas fa-comment-alt me-2"></i>Comment
                                </button>
                                <button type="button" class="btn btn-link btn-lg" data-mdb-ripple-color="dark">
                                    <i class="fas fa-share me-2"></i>Share
                                </button>
                            </div>
                            <!-- Buttons -->

                            <!-- Comments -->

                            <!-- Input -->
                            <div class="d-flex mb-3">
                                <a href="">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/18.webp"
                                         class="border rounded-circle me-2"
                                         alt="Avatar" style="height: 40px"/>
                                </a>
                                <div class="form-outline w-100">
                                    <textarea class="form-control" id="textAreaExample" rows="2"></textarea>
                                    <label class="form-label" for="textAreaExample">Write a comment</label>
                                </div>
                            </div>
                            <!-- Input -->

                            <!-- Answers -->

                            <!-- Single answer -->
                            <div class="d-flex mb-3">
                                <a href="">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp"
                                         class="border rounded-circle me-2"
                                         alt="Avatar" style="height: 40px"/>
                                </a>
                                <div>
                                    <div class="bg-light rounded-3 px-3 py-1">
                                        <a href="" class="text-dark mb-0">
                                            <strong>Malcolm Dosh</strong>
                                        </a>
                                        <a href="" class="text-muted d-block">
                                            <small>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit. Natus, aspernatur!</small>
                                        </a>
                                    </div>
                                    <a href="" class="text-muted small ms-3 me-2"><strong>Like</strong></a>
                                    <a href="" class="text-muted small me-2"><strong>Reply</strong></a>
                                </div>
                            </div>

                            <!-- Answers -->

                            <!-- Comments -->
                        </div>
                        <!-- Interactions -->
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </section>
    <!--Section: Newsfeed-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>

<?php /**PATH E:\php with laravel video\SERVER\htdocs\social-app\resources\views/user/dashboard.blade.php ENDPATH**/ ?>