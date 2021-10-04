<div class="title flex flex-between flex-align-center">
    <span>Бонусы</span>
</div>

<div class="content">
    <div class="alert">
        <span>Активируйте Реферальный/Промо код и получите 5 рублей на баланс.</span>
        <span class="alert-close tooltip" data-close="alert" title="Закрыть">×</span>
    </div>
   <?php if($line): ?>
       <div class="info-bonus">
        <div class="heading">Получить бонус можно 1 раз в 24 часа.</div>
        <div class="desc">Для получения ежедневного бонуса Вам нужно подписаться на нашего &nbsp;<a href="https://t.me/techmain_auth_bot" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram бота</a>.</div>
       </div>
    <div class="slider flex flex-center flex-align-center">
        <div class="arrow top"></div>
        <div class="carousel bonus">
			<div class="cooldown" style="<?php echo e($check ? '' : 'display: none;'); ?>">
				<div class="head">Бонус выдан</div>
			</div>
           <div class="fixed-width">
                <div class="scroll" id="bonus_carousel" style="width: 700000px;">
                  <?php $__currentLoopData = $line; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="user" style="background: #495168;border-radius: 5px;">
                       <div class="summ">
                           <b><?php echo e($l['sum']); ?></b>
                           <p><?php echo e(trans_choice('Монета|Монеты|Монет', $l['sum'])); ?></p>
                       </div>
                   </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
           </div>
        </div>
        <div class="arrow bottom"></div>
    </div>
    <?php endif; ?>
    <div class="captch">
        <?php echo NoCaptcha::renderJs(); ?>

        <?php echo NoCaptcha::display(); ?>

    </div>
    <div class="button">
        <a class="getBonus">Получить бонус</a>
    </div>
</div><?php /**PATH /var/www/html/resources/views/pages/bonus.blade.php ENDPATH**/ ?>