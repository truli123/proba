<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="card-header">pregled</div>
 <div class="card-body">
 Za abecedni redosljed klikni na Naziv filma
        <table class="table sortable">

           <tr><th>plakat</th><th>Naziv filma</th><th>žanr</th><th>trajanje</th><th>godina snimanja</th></tr>
           <br></br>
           
           <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <?php
      $prvo=$f->naslov;
      $prvoslovo=$prvo[0];
            ?>
<?php if($prvoslovo==$slovo): ?>
<tr>
     <td> <img src="<?php echo e($f->image); ?>" height="20px" />      </td>
     <td> <?php echo e($f->naslov); ?>     </td>
     <td> <?php echo e($f->ime->naziv); ?> </td>
     <td> <?php echo e($f->trajanje); ?>   </td>
     <td> <?php echo e($f->godina); ?>     </td>
     
            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    
           <a href='http://localhost/seminar/public/' class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">povratak</a>
                           
                            </div>                    
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolekcija\resources\views/show.blade.php ENDPATH**/ ?>