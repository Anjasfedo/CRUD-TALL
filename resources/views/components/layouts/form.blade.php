@props(['label', 'method'])

<form class="p-4 md:p-5" wire:submit.prevent="{{ $method }}">
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="col-span-2">
            <x-forms.label label="Name" for="inputName" />
            <x-forms.input type="text" id="inputName" name="name" wire:model='name'
                placeholder="Input {{ $label }} Name" />
            <div>
                @error('name')
                    <x-forms.input-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="col-span-2">
            <x-forms.label label="Description" for="inputDescription" />
            <x-forms.textarea id="inputDescription" name="description" wire:model='description'
                placeholder="Input {{ $label }} Description" />
            <div>
                @error('description')
                    <x-forms.input-error message="{{ $message }}" />
                @enderror
            </div>
        </div>
    </div>
    <x-forms.button-submit label="{{ $label }}" />
</form>