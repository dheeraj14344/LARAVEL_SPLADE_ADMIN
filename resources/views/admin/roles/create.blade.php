<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h1 class="text-2xl font-semibold p-4 ">New Role</h1>
            {{-- <x-splade-form :for="$form" /> --}}
            <x-splade-form :action="route('admin.roles.store')" method="POST" class="p-4 bg-white rounded-md space-y-2 ">
                <x-splade-input name="name" label="Name : " />
                <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices />
                <x-splade-submit />
            </x-splade-form> 
        </div>
    </div>
</x-admin-layout>
