import 'dart:convert';

Joke JokeFromJson(String str) => Joke.fromJson(json.decode(str));
String JokeToJson(Joke data) => json.encode(data.toJson());

class Joke {
  Joke({
    this.id,
    this.type,
    this.setup,
    this.punchline,
  });

  int id;
  String type;
  String setup;
  String punchline;

  factory Joke.fromJson(Map<String, dynamic> json) => Joke(
        id: json["id"],
        type: json["type"],
        setup: json["setup"],
        punchline: json["punchline"],
      );

  Map<String, dynamic> toJson() => {
        "id": id,
        "type": type,
        "setup": setup,
        "punchline": punchline,
      };
}
