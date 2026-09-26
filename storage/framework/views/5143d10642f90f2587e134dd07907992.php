
 
  <article class="blog-card">
                        <div class="blog-img-wrap">
                            <img src="<?php echo e(asset($post->image())); ?>" alt="Garment Production" class="img-fluid blog-img">
                            <div class="blog-date-badge">
                                <span class="blog-date-day"><?php echo e($post->created_at->format('d')); ?></span>
                                <span class="blog-date-month"><?php echo e($post->created_at->format('M')); ?></span>
                            </div>
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span class="blog-category"><i class="fa-solid fa-folder-open"></i> Manufacturing</span>
                                <span class="blog-author"><i class="fa-solid fa-user"></i> Admin</span>
                            </div>
                            <h3 class="blog-title"><a href="<?php echo e(route('blogView',$post->slug?:'no-title')); ?>"><?php echo e($post->name); ?></a></h3>
                            <p class="blog-excerpt"><?php echo e($post->short_description); ?></p>
                            <a href="<?php echo e(route('blogView',$post->slug?:'no-title')); ?>" class="blog-read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article><?php /**PATH D:\xampp\htdocs\nuvesta-globa\resources\views/welcome/blogs/includes/blogGrid.blade.php ENDPATH**/ ?>