<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created By</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>Invited Users</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($event->name); ?></td>
                                <td><?php if($event->image): ?><img src="<?php echo e(asset($event->image)); ?>"><?php endif; ?></td>
                                <td><?php echo e($event->creator->name); ?></td>
                                <td><?php echo e($event->description); ?></td>
                                <td><?php echo e($event->startdate); ?></td>
                                <td><?php echo e($event->invited_users); ?></td>
                                <td><a href="<?php echo e(route('events.edit',$event->id)); ?>" class="btn btn-primary">Edit</a>
                                    <form action="<?php echo e(route('events.destroy', $event->id)); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                         <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>        

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>