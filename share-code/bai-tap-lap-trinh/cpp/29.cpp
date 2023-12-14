#include <iostream>
using namespace std;
#include <string>

int main()
{
    // // nhập số thứ 1
    int numberOne;
    cout << "Enter numberOne: ";
    cin >> numberOne;

    // nhập phép tính
    string math;
    cout << "Enter math: ";
    cin >> math;

    // // nhập số thứ 2
    int numberTwo;
    cout << "Enter numberTwo: ";
    cin >> numberTwo;

    int result;
    if (math == "+")
    {
        result = numberOne + numberTwo;
    }
    else if (math == "-")
    {
        result = numberOne - numberTwo;
    }
    else if (math == "x" || math == "X" || math == "*")
    {
        result = numberOne * numberTwo;
    }
    else if (math == "/" || math == ":")
    {
        result = numberOne / numberTwo;
    }
    else
    {
        cout << "Không thực hiện được, chỉ chấp nhận các phép tính + - x :";
    }
    cout << "Kết quả: " << result;
    return 0;
}
