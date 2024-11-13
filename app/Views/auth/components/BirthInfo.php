<div>
    <div class="flex justify-between">
        <div>
            <h2 class="text-lg">Birthdate:</h2>
            <input name="birth_date" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="" type="date" required>
        </div>
        <div>
            <h2 class="text-lg">Birthplace:</h2>
            <input name="birth_place" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Birthplace" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Citizenship:</h2>
            <input name="citizenship" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Citizenship" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Sex</h2>
            <select class="bg-background lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="sex" id="sex" required>
                <option class="" value="" hidden>Sex</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
    </div>
</div>