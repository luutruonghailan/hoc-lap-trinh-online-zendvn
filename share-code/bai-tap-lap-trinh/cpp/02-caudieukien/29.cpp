#include <iostream>
using namespace std;
int main()
{
    // nhập số thứ 1
    int numberOne   = 3;
    int numberTwo   = 5;
    string math     = "+";
    int result = 0;
    if (numberTwo == 0) return;
    if (math == "+")
    {
        result = numberOne + numberTwo;
    }
    else if (math == "-")
    {
        result = numberOne - numberTwo;
    }
    else if (math == "x" || math == "*")
    {
        result = numberOne * numberTwo;
    }
    else if (math == "/" || math == ":")
    {
        result = numberOne / numberTwo;
    }

    if (result != 0)
    {
        cout << numberOne << " " << math << " " << numberTwo << " = " << result;
    }
    else
    {
        cout << "Không thực hiện được, chỉ chấp nhận các phép tính + - x :";
    }
    return 0;
}