<style>
    .banho_tosa_geral {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: 25px 0 0 50px;
        gap: 27px;




    }

    .banho_tosa_formulario {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .titulo_banho_tosa {
        font-family: "Ubuntu", sans-serif;
        color: #73d000;
        font-weight: 600;
        font-size: 24px;
        text-decoration: underline;
    }

    .banho_tosa_inp_lbel {
        display: flex;
        flex-direction: column;
        gap: 3px;


    }

    .banho_tosa_inp_lbel label {
        justify-content: flex-start;
        align-items: center;
        font-family: "Ubuntu", sans-serif;
        color: #854bc4;
        font-weight: 400;
    }

    .banho_tosa_inp_lbel input {

        font-family: "Ubuntu", sans-serif;
        color: #854bc4;
        font-weight: 400;
        padding: 8px 6px;
        border-radius: 6px;
        border-color: #a477d8;
        border: 1px solid;
    }

    .banho_tosa_inp_lbel input:focus {
        border-color: #73d000;
        box-shadow: 0 0 5px #73d000;
        opacity: 0.3;
        outline: none;


    }

    .banho_tosa_inp_lbel select{
        font-family: "Ubuntu", sans-serif;
        color: #854bc4;
        font-weight: 400;
        padding: 8px 6px;
        border-radius: 6px;
        border-color: #a477d8;
        border: 1px solid;
    }

    input[type="datetime-local"] {
        color: #854bc4;

    }

    .button_banho_tosa_enviar {
        background-color: #73d000;
        color: white;
        /* Cor do texto */
        border: none;
        padding: 10px 20px;
        /* Ajuste o padding conforme necessário */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
        /* Borda arredondada */
    }

    .button_banho_tosa_enviar:hover {
        background-color: #5da000;
        /* Mudança de cor ao passar o mouse */
    }
</style>



<section class="banho_tosa_geral">
    <h1 class="titulo_banho_tosa">Agendar Consultas</h1>
    <form class="banho_tosa_formulario">
        <div class="banho_tosa_inp_lbel">
            <label for="inputNomeDono" class="form-label">Responsável</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="banho_tosa_inp_lbel">
            <label for="inputNomeAnimal" class="form-label">Nome do Pet</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>

        <div class="banho_tosa_inp_lbel">
            <label for="inputState" class="form-label">Tipo do Animal</label>
            <select id="inputState" class="form-select">
                <option selected>cachorro</option>
                <option>gato</option>
                <option>passáro</option>
                <option>ovelhas e cabras</option>
                <option>roedor</option>
                <option>cavalo</option>
                <option>boi</option>
        
            </select>
        </div>
        <div class="banho_tosa_inp_lbel">
            <label for="inputDataBanho" class="form-label">Data do Agendamento</label>
            <input type="datetime-local" name="bdaytime" class="form-control" id="inputAddress"
                placeholder="1234 Main St">
        </div>

        <div>
            <button class="button_banho_tosa_enviar" type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</section>