<div>
    <div class="flex flex-col gap-4">
        <div class="flex justify-between">
            <!-- Blood Type -->
            <div>
                <h2 class="text-lg">Blood Type:</h2>
                <select class="bg-white lg:pl-1 lg:min-w-[260px] lg:max-w-[270px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="bloodType" id="" required>
                    <option value="" hidden>Blood type</option>
                    <?php foreach ($blood as $blood_type): ?>
                    <option value="<?= $blood_type['blood_id'] ?>"><?= $blood_type['blood_type'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- Blood Type -->
            <!-- Disability -->
            <div>
                <h2 class="text-lg">Physical disability:</h2>
                <select class="bg-white lg:pl-1 lg:min-w-[260px] lg:max-w-[270px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="physical_disability" id="">
                    <option value="" hidden>Disability</option>
                    <?php foreach ($disabilities as $disability): ?>
                    <option value="<?= $disability['physical_id'] ?>"><?= $disability['physical_disability'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- Disability -->
        </div>

        <!-- Checkboxes -->
        <div class="flex flex-col gap-1">
            <h3 class="text-lg font-semibold">Please check if you have the following:</h3>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Hypertension</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Arthritis/Gout</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Coronary Heart Disease</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Diabetes</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Chronic Kidney Disease</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Alzheimer's/Dementia</label>
            </div>
            <div>
                <input type="checkbox" name="other_health" id="">
                <label for="">Chronic Obstructive Pulmonary Disease</label>
            </div>
        </div>
        <!-- Checkboxes -->
    </div>
</div>