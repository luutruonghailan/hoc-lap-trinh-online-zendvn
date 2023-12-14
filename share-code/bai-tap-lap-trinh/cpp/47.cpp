#include <iostream>
using namespace std;
#include <string>

int main()
{
    int yourAge = 20;
    const int LIMIT_AGE_VIEW_FILM = 18;
    string filmName = "Thế giới lập trình";
    string result = "Bạn KHÔNG được xem phim";

    if (yourAge >= LIMIT_AGE_VIEW_FILM) {
        result = "Bạn được xem phim"; 
    }
cout << result << " " << filmName;

}