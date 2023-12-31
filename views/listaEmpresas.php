<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/links.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-vermelho-500 py-4 flex items-center gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12">
                <path fill-rule="evenodd" d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
            </svg>
            Empresas
        </h1>

        <div class="flex items-center gap-x-4 justify-start w-6/12 mb-4">

            <a href="empresa.php" class="bg-verde-500 rounded-full p-2 focus:bg-slate-50
         text-slate-50 flex items-center justify-center border-2 border-verde-500 
         focus:text-verde-500 transition duration-300 ease-in-out mb-2 mr-8 self-end
         hover:bg-verde-600 hover:border-verde-600 focus:border-verde-500">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
            </a>

            <div class="relative">
                <input id="pesquisa-input" placeholder="Procurar" type="text" class="rounded-md 
    border-0 py-1.5 pr-60 pl-10  ring-1 ring-inset ring-gray-500 
    focus:ring-2 focus:ring-inset focus:ring-vermelho-500 outline-none text-zinc-800">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-neutral-700">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>

        <div class="relative overflow-x-auto rounded-xl">
            <table class="table-auto text-neutral-700 font-medium">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 text-verde-500 bg-slate-50">
                    <tr class="even:bg-slate-50">
                        <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">
                            <div class=" flex items-center gap-x-2">
                            <a <?php
                                echo (!isset($_GET['descrescente'])) ? "href='empresas.php?descrescente'" : "href='empresas.php'";
                                ?> class="hover:text-neutral-700">

                                <?php
                                if (isset($_GET['descrescente'])) {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                 <path fill-rule="evenodd" d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z" clip-rule="evenodd" />
                                            </svg>';
                                } else {
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z" clip-rule="evenodd" />
                                            </svg>';
                                }
                                ?>
                            </a>
                            Nome
        </div>
        </th>
        <th class="w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Endereco</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Telefone</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Email</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">CNPJ</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Cidade</th>
                        <th class=" w-fit capitalize pl-2 pr-6 py-3 whitespace-nowrap" scope="col"">Ações</th>
                    </tr>
                </thead>

                <tbody class=" text-sm bg-neutral-50/40">
            <?php

            if (isset($_GET['descrescente'])) rsort($empresas);

            foreach ($empresas as $empresa) {
                echo '<tr class="even:bg-slate-50">';
                echo '<td class="pl-2 pr-1 w-fit">
                                <div class="flex items-center">
                                    <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                                    hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm mx-2">' .
                    $empresa->getId() .
                    ' </span>
                                ' . $empresa->getNome() . '
                                </div>
                            </td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $empresa->getEndereco() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $empresa->getTelefone() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $empresa->getEmail() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $empresa->getCNPJ() . '</td>';
                echo '<td class="pl-2 pr-1 w-fit py-5 whitespace-nowrap" scope="col">' . $empresa->getNomeCidade() . '
                        <span class="bg-sky-100 py-1 px-2 rounded-md hover:bg-sky-200 text-sky-700
                        hover:cursor-pointer transition duration-300 ease-in-out font-medium text-sm">' .
                    $empresa->getIdCidade() .
                    ' </span>
                        </td>';
                echo '<td class="flex pl-2 pr-1 w-fit py-5 flex-nowrap gap-x-2" scope="col">';

                echo "<a href='empresa.php?id=" . $empresa->getId() . "' class='bg-verde-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-verde-500 focus:text-verde-500 focus:border-verde-500 transition duration-300 ease-in-out
                        hover:bg-verde-600 hover:border-verde-600'>
                            
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                                <path d='M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z' />
                            </svg>
                            </a>";
                echo "<a href='excluirEmpresa.php?id=" . $empresa->getId() . " ' class='bg-vermelho-500 rounded-full py-1 px-4 focus:bg-slate-50
                        text-slate-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-vermelho-500 focus:text-vermelho-500 focus:border-vermelho-500 transition duration-300 ease-in-out
                        hover:bg-vermelho-3 hover:border-vermelho-3'>
                            
                           <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor' class='w-4 h-4'>
                            <path fill-rule='evenodd' d='M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z' clip-rule='evenodd' />
                        </svg>
                            </a>";

                echo '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
            </table>
    </div>
    </div>

    <?php include_once('views/includes/footer.php') ?>
</body>

</html>