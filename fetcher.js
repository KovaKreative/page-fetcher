const URL = process.argv[2];
const PATH = process.argv[3];

const fs = require('fs');
const readline = require('readline');
const request = require('request');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

const makeRequest = function() {
  request(URL + PATH, (error, response, body) => {
    if (error) {
      console.error('error: Unvalid path or URL');
      process.exit();
    }
    checkFolder(PATH, body);
  });
};

const checkFolder = function(path, body) {
  fs.access(`./download/`, (error) => {
    if (error) {
      console.error(error)
      return;
    }
    checkFile(path, body);
  });
};

const checkFile = function(path, body) {
  fs.access(`./download/${path}`, (error) => {
    if (!error) {
      fileExists(path, body);
      return;
    }
    writeData(body);
  });
};

const writeData = function(data) {
  fs.writeFile(`./download/${PATH}`, data, error => {
    if (error) {
      console.error(error);
      process.exit();
    }
    const length = data.length;
    console.log(`Downloaded and saved ${length} bytes to ${PATH}`);
    process.exit();
  });
};

const fileExists = function(filename, data) {
  rl.question("File by this path already exists. Overwrite? Y/N", answer => {
    overWriteHandler(answer, data);
    rl.close();
  });
};

const overWriteHandler = function(answer, data) {
  if (answer.toLowerCase() === "y") {
    writeData(data);
  }
};

makeRequest(URL, PATH);