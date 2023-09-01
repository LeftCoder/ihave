import type { FunctionalComponent } from 'preact'
import { useState } from 'preact/hooks'
import TableRows from '~/cennik.json'

const Table: FunctionalComponent = () => {
  const [search, setSearch] = useState('')

  const filteredPositions = TableRows.filter((position) => {
    return (
      position.model.toLowerCase().includes(search.toLowerCase()) ||
      position.desc.toLowerCase().includes(search.toLowerCase())
    )
  })

  return (
    <>
      <div className="mb-12">
        <label
          for="default-search"
          className="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
          Pole wyszykiwania
        </label>
        <div className="relative">
          <div className="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg
              aria-hidden="true"
              className="h-5 w-5 text-gray-500 dark:text-gray-400"
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
            className="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
            placeholder="Wpisz model telefonu lub szukaną usterkę..."
          />
        </div>
      </div>
      <div className="mb-24">
        {filteredPositions.length > 0 ? (
          <div className="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table className="w-full text-left text-sm text-gray-500 dark:text-gray-400">
              <thead className="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" className="px-6 py-3">
                    Model telefonu
                  </th>
                  <th scope="col" className="px-6 py-3">
                    Opis usługi
                  </th>
                  <th scope="col" className="px-6 py-3">
                    Cena
                  </th>
                </tr>
              </thead>
              <tbody>
                {filteredPositions.map((position) => (
                  <tr
                    key={position.id}
                    className="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600"
                  >
                    <th
                      scope="row"
                      className="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                    >
                      {position.model}
                    </th>
                    <td className="px-6 py-4">{position.desc}</td>
                    <td className="px-6 py-4">{position.price} zł</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        ) : (
          <div className="bg-white p-4 text-center shadow-md dark:bg-gray-800 sm:rounded-lg">
            Brak pozycji do wyświetlenia
          </div>
        )}
      </div>
    </>
  )
}

export default Table
