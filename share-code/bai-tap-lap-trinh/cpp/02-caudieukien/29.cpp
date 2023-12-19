#include <iostream>
using namespace std;
int main()
{
    int numberOne = 3;
    int numberTwo = 0;
    string math = "/";
    int result = 0;

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
        if (numberTwo == 0)
        {
            cout << "không thể chia cho 0" << endl;
            return 0;
        }
        else
        {
            result = numberOne / numberTwo;
        }
    }
    else
    {
        cout << "Không thực hiện được, phép tính không hợp lệ" << endl;
        return 0;
    }

    cout << numberOne << " " << math << " " << numberTwo << " = " << result;
}