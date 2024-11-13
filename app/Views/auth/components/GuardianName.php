<div class="flex flex-col gap-2">
    <h2 class="text-xl font-semibold">Guardian Information:</h2>
    <div class="flex justify-between">
        <div>
            <h2 class="text-lg">First Name:</h2>
            <input name="guardian_firstN" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="First Name" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Middle Name:</h2>
            <input name="guardian_midN" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Middle Name" type="text" min="2">
        </div>
        <div>
            <h2 class="text-lg">Last Name:</h2>
            <input name="guard_lastN" class="lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Last Name" type="text" min="2" required>
        </div>
        <div>
            <h2 class="text-lg">Suffix:</h2>
            <select class="bg-white lg:pl-1 lg:min-w-[130px] lg:max-w-[135px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" name="guardian_extension" id="extension" required>
                <option class="" value="" hidden>Extension</option>
                <option value="">None</option>
                <option value="">Jr</option>
                <option value="">Sr</option>
            </select>
        </div>
    </div>

    <h2 class="text-xl font-semibold">Contact Information:</h2>
    <div class="flex justify-between">
        <div>
            <h2 class="text-lg">Contact Number:</h2>
            <input name="emergency_no" class="lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="+63 *** *** ****" type="text" required>
        </div>
        <div>
            <h2 class="text-lg">Email:</h2>
            <input name="user_email" class="lg:pl-1 lg:min-w-[260px] lg:max-w-[255px] lg:min-h-[23px] lg:max-h-[25px] outline outline-1" placeholder="Email" type="email" required>
        </div>
    </div>
</div>