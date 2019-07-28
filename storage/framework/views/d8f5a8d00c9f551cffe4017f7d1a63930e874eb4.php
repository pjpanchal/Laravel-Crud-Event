<?php $__env->startSection('content'); ?>

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Event</div>

                <div class="panel-body">
                    <form class="form-horizontal"  enctype="multipart/form-data"  method="POST" action="<?php echo e(route('events.update',$event->id)); ?>">
                        <?php echo e(csrf_field()); ?>

                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($event->name); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="description" class="form-control" name="description" value="<?php echo e($event->description); ?>" required>

                                <?php if($errors->has('description')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" value="<?php echo e($event->image); ?>" required>

                                <?php if($errors->has('image')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>  


                        <div class="form-group<?php echo e($errors->has('startdate') ? ' has-error' : ''); ?>">
                            <label for="startdate" class="col-md-4 control-label">Start Date</label>

                            <div class="col-md-6">
                                <input id="startdate" type="date" class="form-control" name="startdate" value="<?php echo e($event->startdate); ?>" required>

                                <?php if($errors->has('startdate')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('startdate')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>  

                        <div class="form-group<?php echo e($errors->has('invited_users') ? ' has-error' : ''); ?>">
                            <label for="invited_users" class="col-md-4 control-label">Invite Users</label>

                            <div class="col-md-6">
                                <select id="invited_users" type="invited_users"  multiple="multiple" class="form-control js-example-basic-single" name="invited_users[]" required>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>    
                                    <span class="help-block">
                                    <?php if($errors->has('invited_users')): ?>
                                        <strong><?php echo e($errors->first('invited_users')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Event
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>