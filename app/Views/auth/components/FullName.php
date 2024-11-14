<div>
    <div class="flex justify-between">
        <div>
            <h2 class="text-lg">First Name:</h2>
            <input name="first_name" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="First Name" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Middle Name:</h2>
            <input name="middle_name" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Middle Name" type="text" min="2">
        </div>
        <div>
            <h2 class="text-lg">Last Name:</h2>
            <input name="last_name" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Last Name" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Suffix:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="extension" id="extension" required>
                <option class="" value="" hidden>Extension</option>
                <option value="none">None</option>
                <option value="">Jr</option>
                <option value="">Sr</option>
            </select>
        </div>
    </div>
</div>