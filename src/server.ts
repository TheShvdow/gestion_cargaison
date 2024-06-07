import express from 'express';
import bodyParser from 'body-parser';
import fs from 'fs';

const app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.post('/submit', (req, res) => {
    let data = req.body;

    fs.writeFile('./data/cargaison.json', JSON.stringify(data), (err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Something went wrong');
        } else {
            console.log('The file has been saved!');
            res.status(200).send('Success');
        }
    });
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});
