<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <a href="<?php echo e(route('index')); ?>"><?php echo e(__('Strona głowna')); ?></a>        </h2>
          <?php if(Auth::check() && Auth::user()->role == 'admin'): ?>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
<?php endif; ?>
<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>


     <?php $__env->endSlot(); ?>
    <form>
    <?php echo csrf_field(); ?>
    <select name="user_id">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->id != $user->id): ?>
            <option value="<?php echo e($user->id); ?>">
            <?php echo e($user->name); ?> (ID: <?php echo e($user->id); ?>, Email: <?php echo e($user->email); ?>, 
            Data utworzenia konta: <?php echo e($user->created_at); ?>)
            </option>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</form>
Wybierz użytkownika, aby sprawdzić jego karnety:
<form action="<?php echo e(route('admin.selectUser')); ?>" method="GET">
    <?php echo csrf_field(); ?>
    <select name="user_id">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->id != $user->id): ?>
            <option value="<?php echo e($user->id); ?>">
            <?php echo e($user->name); ?> (ID: <?php echo e($user->id); ?>, Email: <?php echo e($user->email); ?>)
            </option>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit"><?php echo e(__('Wybierz użytkownika')); ?></button>
</form>

<?php if(isset($selectedUser)): ?>
<form >
    <?php echo csrf_field(); ?>
    <select name="id">
    <?php $__currentLoopData = $selectedUser->tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($ticket->id); ?>">
        <?php echo e($ticket->ticket_type); ?> (ID: <?php echo e($ticket->id); ?>, Data ważności: <?php echo e($ticket->expiry_date); ?>, Data zakupu: <?php echo e($ticket->purchase_date); ?>)
        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</form>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\projekt\projp — kopia\resources\views/admin.blade.php ENDPATH**/ ?>