<?php if ($this->previewMode): ?>
    <div class="form-control"><?= $value ?></div>
<?php else: ?>

    <div
        id="<?= $this->getId() ?>"
        class="field-yearpicker"

    >

        <!-- Date -->
        <div class="input-with-icon right-align">
            <i class="icon icon-calendar-o"></i>
            <input
                type="text"
                name="<?= $field->getName() ?>"
                id="<?= $field->getId() ?>"
                value="<?= e($value) ?>"
                class="form-control align-right"
                autocomplete="off"
                <?= $field->getAttributes() ?>
                <?php if ($minYear): ?>data-min-year="<?= $minYear ?>"<?php endif ?>
                <?php if ($maxYear): ?>data-max-year="<?= $maxYear ?>"<?php endif ?>
                data-yearpicker />
        </div>



    </div>

<?php endif ?>