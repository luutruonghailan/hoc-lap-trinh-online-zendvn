#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    string str1 = "hai";
    string str2 = "hai LAN";
    string str3 = "hai LAN ";

    // Chuyển đổi tất cả ký tự thành chữ thường
    for (char &c : str1)
    { // tham chiếu tới mỗi ký tự trong chuỗi
        c = tolower(c);
    }

    // Chuyển ký tự đầu tiên thành chữ hoa
    if (!str1.empty())
    {
        str1[0] = toupper(str1[0]);
    }

    // Xóa khoảng trắng thừa ở cuối chuỗi
    while (!str1.empty() && isspace(str1.back()))
    {
        str1.pop_back();
    }

    // Thêm dấu chấm nếu chuỗi không kết thúc bằng dấu chấm
    if (!str1.empty() && str1.back() != '.')
    {
        str1 += '.';
    }
    cout << str1;
    return 0;
}