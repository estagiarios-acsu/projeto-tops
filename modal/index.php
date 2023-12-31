 
   <div class="search" style="display:flex;margin-top:20px;">
        <button id="btn-add">Adicionar Linha</button>
        <input style="margin-left:50%;height:30px;margin-top:4%;" class="search" type="text" id="searchInput" placeholder="Pesquisar...">
    </div>

    <table>
        <thead>
            <tr>
                <th>Instituções</th>
                <th>Localidade</th>
                <th>Natureza</th>
                <th>Zona</th>
                <th>Endereço</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Os dados da tabela serão carregados aqui -->
        </tbody>
    </table>

    <div id="modal" class="modal">
        <div class="modal-content">
        <span class="close-button">&times;</span>
                <div class="login-form">
                    <h2 style="font-size:22pt">Preencha as Informações</h2>
                        <form id="myForm">
                            <div class="input-field">
                                <input type="text" name="instituicao" id="username" placeholder="Digite o Nome da Instituição" >
                            </div>
                            <div class="input-field">
                                <input type="text" name="localidade" id="text" placeholder="Digite a Localidade">
                            </div>
                            <div class="input-field">
                                <input type="text" name="natureza" id="text" placeholder="Digite a Natureza">
                            </div>
                            <div class="input-field">
                                <input type="text" name="zona" id="text" placeholder="Digite a Zona">
                            </div>
                            <div class="input-field">
                                <input type="text" name="endereco" id="text" placeholder="Digite o Endereço">
                            </div>
                            <div>
                                <button class="bottom-button" id="closeModalBtn">Cancelar</button>
                                <input name="btn" class="bottom-button" type="submit" value="Adicionar" id="saveBtn">
                            </div>
                        </form>
                </div>
        </div>
    </div>