<div class="flex flex-col gap-3">
    <h2 class="text-xl font-semibold">Contact Information:</h2>
    <div class="flex justify-between">
        <div>
            <h2 class="text-lg">Contact Number:</h2>
            <input name="contact_no" class="lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="+63 *** *** ****" type="text">
        </div>
        <div>
            <h2 class="text-lg">Email:</h2>
            <input name="user_email" class="lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Email" type="email" required>
        </div>
    </div>

    <h2 class="text-xl font-semibold">Additional Information:</h2>
    <div class="flex flex-wrap justify-between gap-2">
        <div>
            <h2 class="text-lg">Educational Attainment:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="education" id="" required>
                <option value="" hidden>Educational Attainment</option>
                <?php foreach ($education as $educs): ?>
                <option value="<?= $educs['education_id'] ?>"><?= $educs['education_attainment'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <h2 class="text-lg">Religion:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="religion" id="" required>
                <option value="" hidden>Religion</option>
                <?php foreach ($religion as $religions): ?>
                <option value="<?= $religions['religion_id'] ?>"><?= $religions['religion_name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <h2 class="text-lg">Civil Status:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="civil_status" id="" required>
                <option value="" hidden>Civil Status</option>
                <?php foreach ($civil as $civil_status): ?>
                <option value="<?= $civil_status['civil_id'] ?>"><?= $civil_status['civil_status'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>