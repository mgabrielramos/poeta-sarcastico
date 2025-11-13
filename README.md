# **Gerador de Poemas Sarcásticos Técnico-Filosóficos (PHP + JS)**

Um microprojeto experimental que combina **linguagem técnica**, **filosofia existencial** e **sarcasmo sociológico** para gerar poemas algorítmicos.
A proposta é simples: usar PHP no backend para criar versos a partir de gramáticas controladas, enquanto o frontend em HTML + JS oferece uma interface minimalista.

Este projeto é ideal como demonstração de:

* manipulação de strings e geração procedural de texto
* arquitetura leve cliente-servidor
* uso de PHP moderno sem dependências
* experimentos criativos com algoritmos linguísticos

---

## **Demo**

Gera poemas que misturam termos técnicos, conceitos filosóficos e acidez crítica — tudo através de combinações pseudo-aleatórias com sabor de ironia.

---

## **Tecnologias utilizadas**

* **PHP 7+**
  Backend responsável por montar os versos, controlar a aleatoriedade e retornar JSON.

* **HTML5 + CSS3**
  Interface limpa e responsiva.

* **JavaScript (vanilla)**
  Comunicação com o backend via `fetch()` e atualização dinâmica do conteúdo.

Nenhuma dependência externa. Nenhum framework. Apenas a essência crua.

---

## **Estrutura do Projeto**

```
/poeta-sarcastico
  ├── index.html        # Interface do usuário
  └── generator.php     # Motor de geração de poemas
```

---

## **Como funciona**

1. O usuário escolhe o número de versos.
2. O frontend envia esta configuração para `generator.php`.
3. O backend seleciona aleatoriamente palavras de vocabulários técnicos, filosóficos e sarcásticos.
4. Monta versos seguindo estruturas gramaticais pré-definidas.
5. Retorna o poema completo em JSON.
6. O frontend exibe o resultado.

---

## **Como executar**

1. Baixe ou clone este repositório:

```bash
git clone https://github.com/SEU_USUARIO/poeta-sarcastico.git
```

2. Coloque o projeto em qualquer servidor com suporte a PHP:

   * Apache
   * Nginx (com PHP-FPM)
   * XAMPP / WAMP / Laragon
   * ou mesmo o servidor embutido do PHP:

```bash
php -S localhost:8000
```

3. Acesse no navegador:

```
http://localhost:8000
```

4. Clique em “Gerar poema” e aproveite a acidez.

---

## **Personalização**

Você pode editar facilmente:

* listas de termos técnicos
* listas filosóficas
* expressões sarcásticas
* estruturas de verso
* quantidade de versos
* estilos visuais do frontend

O algoritmo foi pensado para ser extensível e brincável.

---

## **Próximos passos (opcionais)**

* Modo “IA”: enviar o poema bruto para uma LLM (Fireworks.ai, OpenAI etc) para refinamento estilístico.
* Exportar poemas como imagem (canvas).
* Criar seed consistente para reprodutibilidade.
* Criar temas (“mais técnico”, “mais filosófico”, “mais ácido”).

---

## **Licença**

MIT — livre para modificar, estudar e usar como quiser.

---
