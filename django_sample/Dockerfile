FROM python:3.8-alpine
ENV PYTHONUNBUFFERED 1
RUN apk update && apk add gcc python3-dev musl-dev
RUN pip install --upgrade pip
RUN pip install django
COPY . /code/
WORKDIR /code
EXPOSE 8000
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
