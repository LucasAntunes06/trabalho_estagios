<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estágios IFRS - Alunos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include('views/includes/favicons.php'); ?>
</head>

<body>

    <?php include('views/includes/menu.php') ?>

    <div class="flex flex-col justify-center items-center gap-2">
        <h1 class="font-bold text-4xl text-[#C62126] py-4">
            <i class="fa-solid fa-circle-user"></i>
            Alunos
        </h1>

        <a href="aluno.php" class="bg-[#127852] rounded-full p-2 hover:bg-zinc-50
                     text-zinc-50 flex items-center justify-center border-2 border-[#127852] hover:text-[#127852]
                     mb-2 mr-8 self-end transition duration-300 ease-in-out">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>

        </a>

        <div class="relative overflow-x-auto w-11/12 border-gray-200 border-1 rounded-md border-gray-200 border-1 border-x border-y rounded-xl">
            <table class="border-y-[1px] border-y-zinc-300 px-4">
                <thead class="pl-6 font-semibold text-sm text-left pr-3 py-3.5 bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 capitalize w-min">Matrícula</th>
                        <th class="px-6 py-3 capitalize w-min">Id do aluno</th>
                        <th class="px-6 py-3 capitalize w-min">Nome</th>
                        <th class="px-6 py-3 capitalize w-min">Data de nascimento</th>
                        <th class="px-6 py-3 capitalize w-min">Email</th>
                        <th class="px-6 py-3 capitalize w-min">CPF</th>
                        <th class="px-6 py-3 capitalize w-min">RG</th>
                        <th class="px-6 py-3 capitalize w-min">Endereco</th>
                        <th class="px-6 py-3 capitalize w-min">Telefone</th>
                        <th class="px-6 py-3 capitalize w-min">Ano Turma</th>
                        <th class="px-6 py-3 capitalize w-min">Id Cidade</th>
                        <th class="px-6 py-3 capitalize w-min">Id Curso</th>
                        <th class="px-6 py-3 capitalize w-min">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($alunos as $aluno) {
                        echo '<tr class="border-b">';
                        echo '<td class="p-1 w-min">' . $aluno->getMatricula() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getId() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getNome() . '</td>';
                        echo '<td class="p-1 w-min date">' . $aluno->getDataNascimento() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getEmail() . '</td>';
                        echo '<td class="p-1 w-min cpf">' . $aluno->getCPF() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getRG() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getEndereco() . '</td>';
                        echo '<td class="p-1 w-min phone_with_ddd">' . $aluno->getTelefone() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getAnoTurma() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getIdCidade() . '</td>';
                        echo '<td class="p-1 w-min">' . $aluno->getIdCurso() . '</td>';
                        echo '<td class="border-y-[1px]  px-4 flex flex-col">';

                        echo "<a href='Aluno.php?id=" . $aluno->getId() . "' class=' bg-[#127852] rounded-md py-1 px-4 hover:bg-zinc-50
                     text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#127852] hover:text-[#127852]'>
                        Editar
                        <span class='material-symbols-outlined'>edit</span>
                        </a>";
                        echo "<a href='excluirAluno.php?id=" . $aluno->getId() . "' class=' bg-[#C62126] rounded-md py-1 px-4 hover:bg-zinc-50
                    text-zinc-50 flex items-center mt-4 gap-x-2 justify-center border-2 border-[#C62126] hover:text-[#C62126] transition duration-300 ease-in-out'>
                        Excluir
                        <span class='material-symbols-outlined'>delete</span>
                        </a>";

                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>