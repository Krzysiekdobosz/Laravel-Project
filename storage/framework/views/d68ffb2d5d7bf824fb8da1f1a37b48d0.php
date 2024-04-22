<!-- resources\views\buy-ticket.blade.php -->



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
<div class="p-6 text-gray-900">
        <!-- Formularz zakupu karnetu -->
        <form action="<?php echo e(route('buy-ticket')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div>
            <label for="dance_group">Grupa taneczna:</label>
    <select id="dance_group" name="dance_group" required>
        <option value="">--Wybierz grupę--</option>
        <option value="poczatkowa">Początkowa</option>
        <option value="kontynuacja">Kontynuacja</option>
        <option value="reprezentacja">Reprezentacja</option>
</select>
            </div>
            <div>
                <label for="type">Typ karnetu:</label>
                <select id="type" name="ticket_type" required>
                    <option value="">--Wybierz typ--</option>
                    <option value="monthly">Miesięczny</option>
                    <option value="annual">Roczny</option>
                </select>
            </div>
            <div>
                <label for="price">Cena:</label>
                <input type="number" id="price" name="price" required readonly>

            <button type="submit">Kup karnet</button>
        </form>
    </div>
    <script src="<?php echo e(asset('js/ticketPrice.js')); ?>"></script>
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

<?php /**PATH C:\xampp\htdocs\projekt\projp — kopia\resources\views/buy-ticket.blade.php ENDPATH**/ ?>