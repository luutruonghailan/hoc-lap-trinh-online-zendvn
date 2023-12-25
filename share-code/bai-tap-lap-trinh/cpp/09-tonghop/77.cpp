#include <iostream>
#include <sstream>
#include <unordered_map>
#include <vector>
#include "zvn.h"

using namespace std;

vector<string> splitString(string inputStr)
{
    vector<string> vector;
    int length = inputStr.length();
    bool isDelimiter = false;
    string item = "";

    for (int i = 0; i < length; i++)
    {
        char character = inputStr[i];
        if (character == '=' || character == ';')
        {
            isDelimiter = true;
        }
        else
        {
            item += character;
        }

        if (isDelimiter || i == length - 1)
        {
            vector.push_back(item);
            isDelimiter = false;
            item = "";
        }
    }

    return vector;
}

int main()
{
    string inputName = "abw=java;def=android;nfv=php;";
    string inputTime = "abw=9920;nfv=240;def=1990";
    int lengthInputName = inputName.length();
    int lengthInputTime = inputTime.length();
    vector<string> vName = splitString(inputName);
    vector<string> vTime = splitString(inputTime);
    vector<string> vCourseId;
    int sizeVTime = vTime.size();
    string item = "";
    bool isDelimiter = false;
    int maxTime = -1;
    int maxTimeIdx = -1;

    // lấy thời gian lớn nhất
    for (int i = 1; i < sizeVTime; i += 2)
    {
        int time = stoi(vTime[i]);
        if (time > maxTime)
        {
            maxTime = time;
        }
    }

    // lấy danh sách id khóa học có thời gian lớn nhất
    for (int i = 0; i < sizeVTime; i += 2)
    {
        string courseId = vTime[i];
        int time = stoi(vTime[i + 1]);

        if (time == maxTime)
        {
            vCourseId.push_back(courseId);
        }
    }

    // duyệt và in thông tin
    for (int i = 0; i < vName.size(); i += 2)
    {
        string courseId = vName[i];
        string courseName = vName[i + 1];
        if (checkExistInVector(vCourseId, courseId))
        {
            cout << "Course Id: " << courseId << " - Course Name: " << courseName << " - Course Time: " << maxTime << endl;
        }
    }

    return 0;
}