<div>
    <div class="flex justify-between">
        <div>
            <h2 class="text-xl">Province:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="" id="">
                <option value="" hidden>Purok</option>
                <?php foreach ($province as $prov): ?>
                <option value="<?= $prov['province_id'] ?>"><?= esc($prov['province_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <h2 class="text-xl">Municipality:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="" id="">
                <option value="" hidden>Municipality</option>
                <?php foreach ($municipality as $mun): ?>
                <option value="<?= $mun['municipality_id'] ?>"><?= esc($mun['municipality_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <h2 class="text-xl">Barangay:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="" id="">
                <option value="" hidden>Barangay</option>
                <?php foreach ($barangay as $bar): ?>
                <option value="<?= $bar['barangay_id'] ?>"><?= esc($bar['barangay_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <h2 class="text-xl">Purok:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="" id="">
                <option value="" hidden>Purok</option>
                <?php foreach ($purok as $puroks): ?>
                <option value="<?= $puroks['purok_id'] ?>"><?= esc($puroks['purok_no']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>