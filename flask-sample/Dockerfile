FROM python:3.8-alpine
ENV PYTHONUNBUFFERED 1

RUN pip install --upgrade pip
RUN pip install flask
COPY . /code/
WORKDIR /code
EXPOSE 8000

CMD ["flask", "--app", "app", "run", "--host", "0.0.0.0", "--port", "8000"]