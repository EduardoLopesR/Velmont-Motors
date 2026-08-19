const express = require('express');
const path = require('path');

const app = express();

console.log('__dirname:', __dirname);

const caminhoCSS = path.join(__dirname, 'src', 'styles', 'login.css');

console.log('Caminho do CSS:', caminhoCSS);

app.get('/teste-css', (req, res) => {
    res.sendFile(caminhoCSS);
});

app.use( express.static(path.join(__dirname, 'src')));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

app.listen(3000, () => {
    console.log('Servidor rodando na porta 3000');
});
console.log('ESTA E A VERSAO NOVA DO SERVER');