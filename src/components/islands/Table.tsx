import { FunctionalComponent } from 'preact';
import { useState } from 'preact/hooks';
import TableRows from '~/cennik.json'

const Table: FunctionalComponent = () => {
    const [search, setSearch] = useState('')

    const filteredPositions = TableRows.filter(position => {
        return (
            position
            .model
            .toLowerCase()
            .includes(search.toLowerCase()) ||
            position
            .desc
            .toLowerCase()
            .includes(search.toLowerCase())
        )
    })

    return (
        <>
            <div className="mb-12">
                <label
                for="default-search"
                className="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
                >
                    Pole wyszykiwania
                </label>
                <div className="relative">
                <div
                    className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                    <svg
                    aria-hidden="true"
                    className="w-5 h-5 text-gray-500 dark:text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    ></path>
                    </svg>
                </div>
                <input
                    onInput={(e) => setSearch((e.target as HTMLInputElement).value)}
                    value={search}
                    type="search"
                    name="search"
                    id="default-search"
                    className="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Wpisz model telefonu lub szukaną usterkę..."
                />
                </div>
            </div>
            <div className="mb-24">
                {filteredPositions.length > 0 ? (
                <div
                    className="overflow-x-auto relative shadow-md sm:rounded-lg"
                >
                    <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead
                            className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                        <tr>
                            <th scope="col" className="py-3 px-6">Model telefonu</th>
                            <th scope="col" className="py-3 px-6">Opis usługi</th>
                            <th scope="col" className="py-3 px-6">Cena</th>
                        </tr>
                        </thead>
                        <tbody>
                            {filteredPositions.map((position) => (
                                <tr
                                    className="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                >
                                    <th
                                    scope="row"
                                    className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                    >
                                    { position.model }
                                    </th>
                                    <td className="py-4 px-6">{ position.desc }</td>
                                    <td className="py-4 px-6">{ position.price } zł</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
                ) : (
                <div
                    class="shadow-md sm:rounded-lg bg-white dark:bg-gray-800 text-center p-4"
                >
                    Brak pozycji do wyświetlenia
                </div>
                )}
            </div>
        </>
    )
}

export default Table