function isValid(s) {
    let stack = [];
    if (s.length === 1) {
        return false;
    }
    for (let i = 0; i < s.length; i++) {
        if (s[i] === "[" || s[i] === "{" || s[i] === "(") {
            stack.push(s[i]);
        }
        else if (s[i] === "]" || s[i] === "}" || s[i] === ")") {
            if (stack.pop() === "}" || stack.pop() === "}" || stack.pop() === "]") {
            }
            else {

            }
        }
        else {
            return false;
        }
        
    }

}
console.log(isValid("()")); 