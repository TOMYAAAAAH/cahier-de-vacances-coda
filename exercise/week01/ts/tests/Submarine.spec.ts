
import * as fs from 'fs';

const rawFile:string = fs.readFileSync('tests/submarine.txt', 'utf-8');
const lines:string[] = rawFile.split('\n');

let horizontal:number = 0;
let depth:number = 0;

lines.forEach(line => {
    let [command, value]:string[] = line.split(' ');
    if (command === "forward") {
        horizontal+=Number(value);
    } else if(command === "up"){
        depth-=Number(value);
    } else if(command === "down"){
        depth+=Number(value);
    }
})



describe('submarine should move', function () {
    test('on given text instructions', () => {
        // TODO find the right result by implementing the Submarine logic
        expect(horizontal*depth).toBe(1690020);
    })
})
