<div>
    <table class="w-full text-left text-gray-500 text-md rtl:text-right dark:text-gray-400">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block mb-6 mt-12 ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Create
        </button>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($dataHeaders as $item)
                    <th scope="col" class="px-6 py-3">
                        {{ ucfirst($item) }}
                    </th>
                @endforeach
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataValues as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach ($dataHeaders as $header)
                    <td class="px-6 py-4">
                        {{ $item->{$header} }}
                    </td>
                @endforeach
                <td class="px-6 py-4 space-x-3">
                    <button data-modal-target="detailModal" data-modal-show="detailModal" type="button"
                        class="font-medium text-green-600 dark:text-green-500 hover:underline">Detail</button>

                    <button href="#" type="button" data-modal-target="editModal" data-modal-show="editModal"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>

                    <button data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <x-modals.create-modal label="Category" />
</div>
