<!-- resources/views/tasks.blade.php -->



<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!--Create Task Form-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <!-- New Task Form -->
                    <form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>


                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"
                                       value="<?php echo e(old('task')); ?>">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <!-- TODO: Current Tasks -->
                <?php if(count($tasks) > 0): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                <?php foreach($tasks as $task): ?>
                                        <?php if(!$task->is_done): ?>
                                    <tr>
                                        <!-- Task Name -->

                                            <tr>
                                            <td class="table-text">
                                                <div><?php echo e($task->name); ?></div>
                                            </td>
                                        <td>Created at <?php echo e(date_format($task->created_at, 'd/m/Y H:i')); ?></td>
                                        <td>
                                            <!-- TODO: Delete Button -->
                                            <form class="form-group" action="<?php echo e(url('task/'.$task->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>

                                                <?php echo method_field('DELETE'); ?>


                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                            <form class="form-group" method="post" action="<?php echo e(route('task-done',['task'=>$task])); ?>">
                                                <?php echo csrf_field(); ?>

                                                <button class="btn btn-success" type="submit">Done</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tasks Done
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            <?php foreach($tasks as $task): ?>
                                <?php if($task->is_done): ?>
                                    <tr>
                                        <!-- Task Name -->

                                    <tr>
                                        <td class="table-text">
                                            <div><?php echo e($task->name); ?></div>
                                        </td>

                                        <td>Done at <?php echo e(date_format(new DateTime($task->done_at), 'd/m/Y H:i')); ?></td>
                                        <td>
                                            <!-- TODO: Delete Button -->
                                            <form action="<?php echo e(url('task/'.$task->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>

                                                <?php echo method_field('DELETE'); ?>


                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!--Create Task Form-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Newsletters
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <!-- New Task Form -->
                    <form action="<?php echo e(url('newsletters')); ?>" method="POST" class="form-horizontal">
                        <?php echo csrf_field(); ?>


                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-6">
                                <input type="email" name="mail" id="email" class="form-control">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>